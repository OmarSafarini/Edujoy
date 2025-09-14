import { Component, Input, ViewChild  } from '@angular/core';
import { Lesson } from '../../../models/lesson.model';
import { CommonModule } from '@angular/common';
import { RouterModule } from '@angular/router';
import { AddVideoToLessonComponent } from "../../add-video-to-lesson/add-video-to-lesson.component";
import { ModalComponent } from '../../modal/modal.component';
import { VoiceService } from '../../../services/voice.service';


@Component({
  selector: 'app-lesson-block',
  standalone: true,
  imports: [CommonModule, RouterModule, AddVideoToLessonComponent,ModalComponent],
  templateUrl: './lesson-block.component.html',
  styleUrl: './lesson-block.component.css'
})
export class LessonBlockComponent {

   @ViewChild('videoModal') videoModal!: ModalComponent;

  @Input() lesson!: Lesson;

  isFormOpen: boolean = false
  lessonId: number = 0;
  constructor(private voice: VoiceService) {}
openAddVideoForm(isBack?: boolean) {
  if (isBack === true) {
    this.isFormOpen = false;
  } else {
    this.isFormOpen = true;
    this.lessonId = this.lesson.id;
  }
}
onVideoAdded(success: boolean) {
    if (success) {
      this.videoModal.title = 'نجاح';
      this.videoModal.message = 'تمت إضافة الفيديو بنجاح ';
      this.videoModal.type = 'success';
    } else {
      this.videoModal.title = 'خطأ';
      this.videoModal.message = 'فشل في إضافة الفيديو ';
      this.videoModal.type = 'error';
    }
    this.videoModal.open();
  }

  speakLessonTitle(lesson: any) {
  const text = lesson.name;
  this.voice.playText(text, "ar-SA");
}

}
