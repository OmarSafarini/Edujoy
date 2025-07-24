import { Component, Input, OnInit } from '@angular/core';
import {ReactiveFormsModule, FormControl, FormGroup } from '@angular/forms';
import {CourseService} from '../services/course.service';
import { Lesson } from '../models/lesson.model';


@Component({
  selector: 'app-add-lesson-to-course',
  imports: [ReactiveFormsModule],
  templateUrl: './add-lesson-to-course.component.html',
  styleUrl: './add-lesson-to-course.component.css'
})
export class AddLessonToCourseComponent {
  lessonForm !: FormGroup;
  @Input() courseId!: number;


  constructor(private courseService:CourseService) {}


  lessonToAdd !: Lesson


  ngOnInit(): void {

    this.lessonForm = new FormGroup({
      lessonName : new FormControl(""),
    });

    console.log(this.lessonForm.value);
  }

  onSubmit() {
    if (this.lessonForm.valid) {
      this.lessonToAdd = {
        id:0,
        name: this.lessonForm.value.lessonName,
        course_id: this.courseId,
        videos: []
      };

      this.courseService.addLessonToCourse(this.lessonToAdd, this.lessonToAdd.course_id).subscribe({
        next: (response) => {
          console.log('Lesson Added succeccfully:', response);
          this.lessonForm.reset();
        },
        error: (error) => {
          console.error('Error:', error);
          alert('Added Fiald');
        }
      });
    } 
    else {
      alert('Invalid Form');
    }

  }

}
