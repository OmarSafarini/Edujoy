import { Component, OnInit } from '@angular/core';
import { LessonBlockComponent } from './lesson-block/lesson-block.component';
import { Course } from '../models/course.model';
import { LessonsService } from '../services/lessons.service';
import { CommonModule } from '@angular/common';

@Component({
  selector: 'app-lessons-list',
  imports: [LessonBlockComponent, CommonModule],
  templateUrl: './lessons-list.component.html',
  styleUrl: './lessons-list.component.css'
})
export class LessonsListComponent implements OnInit
{

  course?: Course;

  constructor(private lessonsService: LessonsService){}

  ngOnInit(){
    const courseId = 1;
    this.lessonsService.getCourseWithLessons(courseId).subscribe({
      next: (res:any) => {
        this.course = res[0]; 
      }, 
    }) 
}
  

}
