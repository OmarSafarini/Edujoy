import { Component, OnInit } from '@angular/core';
import { LessonBlockComponent } from './lesson-block/lesson-block.component';
import { Course } from '../../models/course.model';
import { LessonsService } from '../../services/lessons.service';
import { CommonModule } from '@angular/common';
import { AddLessonToCourseComponent } from '../add-lesson-to-course/add-lesson-to-course.component';
import { ActivatedRoute } from '@angular/router';

@Component({
  selector: 'app-lessons-list',
  imports: [LessonBlockComponent, CommonModule, AddLessonToCourseComponent],
  templateUrl: './lessons-list.component.html',
  styleUrl: './lessons-list.component.css'
})
export class LessonsListComponent implements OnInit
{

  course !: Course;
  courseId: number = 0;

  isLessonFormOpen: boolean = false;
  constructor(private lessonsService: LessonsService, private route: ActivatedRoute){}


  ngOnInit(){
    this.courseId = Number(this.route.snapshot.paramMap.get('courseId'));

    this.lessonsService.getCourseWithLessons(this.courseId).subscribe({
      next: (res:any) => {
        this.course = res[0]; 
        console.log(this.course?.id)
      }, 
    }) 
}
  openLessonForm(){
    this.isLessonFormOpen = !this.isLessonFormOpen
  }

}
