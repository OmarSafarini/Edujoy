import { Component, OnInit, ViewChild } from '@angular/core';
import { LessonBlockComponent } from './lesson-block/lesson-block.component';
import { Course } from '../../models/course.model';
import { LessonsService } from '../../services/lessons.service';
import { CommonModule } from '@angular/common';
import { AddLessonToCourseComponent } from '../add-lesson-to-course/add-lesson-to-course.component';
import { ActivatedRoute } from '@angular/router';
import { ModalComponent } from '../modal/modal.component';

@Component({
  selector: 'app-lessons-list',
  imports: [LessonBlockComponent, CommonModule, AddLessonToCourseComponent,ModalComponent],
  templateUrl: './lessons-list.component.html',
  styleUrl: './lessons-list.component.css'
})
export class LessonsListComponent implements OnInit
{
  @ViewChild('lessonModal') lessonModal!: ModalComponent;


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

  loadCourse() {
  this.lessonsService.getCourseWithLessons(this.courseId).subscribe({
    next: (res: any) => {
      this.course = res[0];
    },
  });
}

  onLessonAdded(success: boolean) {
    if (success) {
      this.lessonModal.title = 'نجاح';
      this.lessonModal.message = 'تمت إضافة الدرس بنجاح!';
      this.lessonModal.type = 'success';
      this.loadCourse(); // لتحديث قائمة الدروس
    } else {
      this.lessonModal.title = 'فشل';
      this.lessonModal.message = 'حدث خطأ أثناء إضافة الدرس!';
      this.lessonModal.type = 'error';
    }
    this.lessonModal.open();
  }
}
