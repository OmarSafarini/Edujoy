import { Component, OnInit } from '@angular/core';
import { NotificationService } from '../../services/notifications.service';
import { Notification } from '../../models/notification.model';
import { CommonModule } from '@angular/common';
import { NavbarComponent } from '../navbar/navbar.component';
import { LoaderComponent } from '../loader/loader.component';
import { VoiceService } from '../../services/voice.service';

@Component({
  selector: 'app-notifications',
  imports: [CommonModule,NavbarComponent,LoaderComponent],
  templateUrl: './notifications.component.html',
  styleUrls: ['./notifications.component.css'],
})
export class NotificationListComponent implements OnInit {
  emptyImage = 'assets/emptyNotifications.png'; // مسار الصورة الفارغة
  notifications: Notification[] = [];
  loading: boolean = false;
  constructor(private notificationService: NotificationService,private voice:VoiceService) {}

  ngOnInit(): void {
    this.loadNotifications();
  }

  loadNotifications() {
    this.loading = true; // بدء التحميل
    this.notificationService.getNotifications().subscribe({
      next: (data) => {
        this.notifications = data;
        this.loading = false; // انتهاء التحميل
      },
      error: (err) => {
        console.error(err);
        this.loading = false; // انتهاء التحميل حتى لو في خطأ
      }
    });
  }

 markAsRead(id: number) {
  this.notificationService.markAsRead(id).subscribe(() => {
    const notif = this.notifications.find(n => n.id === id);
    if (notif) {
      notif.read_at = new Date().toISOString(); // تحديث محلي بدون ريفرش كامل
    }
  });
}


  markAllAsRead() {
  this.notificationService.markAllAsRead().subscribe(() => {
    // تحديث محلي فوري للنوتيفكيشنز
    this.notifications = this.notifications.map(n => ({
      ...n,
      read_at: new Date().toISOString() // نحط وقت القراءة
    }));
  });
}

  deleteNotification(id: number) {
    this.notificationService.deleteNotification(id).subscribe(() => {
      this.loadNotifications();
    });
  }
  
  get unreadCount(): number {
  return this.notifications.filter(n => !n.read_at).length;
}
getNotificationImage(title: string): string {
  switch (title) {
    case 'درس جديد مضاف':
      return 'assets/newLesson.png';
    case 'أحسنت! نصف الطريق':
      return 'assets/halfawayCourse.png';
    case 'أنت قريب من النهاية':
      return 'assets/almostDoneCourse.png';
    case 'تهانينا! أنجزت الكورس بالكامل':
      return 'assets/courseDone.png';
    default:
      return 'assets/defaultNotification.png'; // صورة افتراضية في حال لم يتطابق
  }
}
speakNotification(notification: any) {
  const text = `${notification.title}. ${notification.body}`;
  this.voice.playText(text, "ar-SA");
}

}
