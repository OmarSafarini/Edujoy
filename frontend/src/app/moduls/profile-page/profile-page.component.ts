import { Component, OnInit, ViewChild } from '@angular/core';
import { CommonModule } from '@angular/common';
import { FormsModule } from '@angular/forms';
import { NavbarComponent } from '../navbar/navbar.component';
import { VoiceService } from '../../services/voice.service';
import { Router } from '@angular/router';
import { ModalComponent } from '../modal/modal.component';
declare var bootstrap: any;


@Component({
  selector: 'app-profile-page',
  imports: [CommonModule, FormsModule,NavbarComponent,ModalComponent],
  templateUrl: './profile-page.component.html',
  styleUrl: './profile-page.component.css'
})
export class ProfilePageComponent implements OnInit {
  @ViewChild('myModal') myModal!: ModalComponent;
  clipImage= 'assets/paperclip-removebg-preview.png';
  tapeImage = 'assets/tape-removebg-preview.png';
  profileImageUrl = 'https://upload.wikimedia.org/wikipedia/commons/9/99/Sample_User_Icon.png?20200919003010'; // صورة افتراضية
  editMode = false;
  animatedProgress: number = 0;
  //userId: number | undefined;

 modalTitle: string = '';
  modalMessage: string = '';
  modalType: 'success' | 'error' | 'warning' = 'success';

  userId=1;//tempp
  constructor(
    public voiceService: VoiceService,private router: Router
  ) {
    const nav = this.router.getCurrentNavigation();
    this.userId = nav?.extras.state?.['id'];
  }
  
 ngOnInit() {
  let current = 0;
  const target = this.profile.progress;
  const interval = setInterval(() => {
    if (current >= target) {
      clearInterval(interval);
    } else {
      current++;
      this.animatedProgress = current;
    }
  }, 30); 
}
  profile = {
    image: "",
    name: 'تالا أحمد',
    email: 'tala@example.com',
    city: 'رام الله',
    phone: '0591234567',
    completedCourses: 8,
  progress: 80,
  level: 'متقدم',
  age: 25,
  bio: 'تعبتتتتتتتتتتتتتتتتتتتتتتتتتت',
  username: 'tala_ahmed',
  };

  onImageChange(event: Event) {
    const input = event.target as HTMLInputElement;
    if(input.files && input.files[0]) {
      const reader = new FileReader();
      reader.onload = () => {
        this.profile.image = reader.result as string;
      };
      reader.readAsDataURL(input.files[0]);
    }
  }

  saveChanges() {
    this.editMode = false;
    this.modalTitle = 'تم الحفظ';
    this.modalMessage = 'تم تحديث بيانات المستخدم بنجاح';
    this.modalType = 'success';

    this.myModal.open(); // هنا نستخدم الـ ModalComponent مباشرة
  }

  cancelEdit() {
    this.editMode = false;
  }
  speakText(text: string) {
  this.voiceService.playText(text, "ar-SA");
}
  
}
