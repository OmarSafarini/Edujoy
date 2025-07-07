import { Component, Input  } from '@angular/core';
import { Lesson } from '../../../models/lesson.model';
import { CommonModule } from '@angular/common';
import { RouterModule } from '@angular/router';


@Component({
  selector: 'app-lesson-block',
  imports: [CommonModule, RouterModule],
  templateUrl: './lesson-block.component.html',
  styleUrl: './lesson-block.component.css'
})
export class LessonBlockComponent {

  @Input() lesson!: Lesson;

}
