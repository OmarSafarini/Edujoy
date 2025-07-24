import { Component, Input  } from '@angular/core';
import { Lesson } from '../../../models/lesson.model';
import { CommonModule } from '@angular/common';
import { RouterModule } from '@angular/router';
import { AddVideoToLessonComponent } from "../../add-video-to-lesson/add-video-to-lesson.component";


@Component({
  selector: 'app-lesson-block',
  standalone: true,
  imports: [CommonModule, RouterModule, AddVideoToLessonComponent],
  templateUrl: './lesson-block.component.html',
  styleUrl: './lesson-block.component.css'
})
export class LessonBlockComponent {

  @Input() lesson!: Lesson;

  isFormOpen: boolean = false
  lessonId: number = 0;
  
openAddVideoForm(isBack?: boolean) {
  if (isBack === true) {
    this.isFormOpen = false;
  } else {
    this.isFormOpen = true;
    this.lessonId = this.lesson.id;
  }
}

}
