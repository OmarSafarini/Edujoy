import { Component, EventEmitter, Input, OnInit, Output } from '@angular/core';
import { ReactiveFormsModule, FormControl, FormGroup } from '@angular/forms';
import { CourseService } from '../../services/course.service';
import { Lesson } from '../../models/lesson.model';
import { ModalComponent } from '../modal/modal.component';

@Component({
  selector: 'app-add-lesson-to-course',
  imports: [ReactiveFormsModule,ModalComponent],
  templateUrl: './add-lesson-to-course.component.html',
  styleUrl: './add-lesson-to-course.component.css',
})
export class AddLessonToCourseComponent {
  lessonForm!: FormGroup;
  @Input() courseId!: number;
  @Output() lessonAdded = new EventEmitter<boolean>();

  constructor(private courseService: CourseService) {}

  lessonToAdd!: Lesson;

  ngOnInit(): void {
    this.lessonForm = new FormGroup({
      lessonName: new FormControl(''),
    });

    console.log(this.lessonForm.value);
  }

  onSubmit() {
    if (this.lessonForm.valid) {
      this.lessonToAdd = {
        id: 0,
        name: this.lessonForm.value.lessonName,
        course_id: this.courseId,
        videos: [],
      };

      this.courseService
        .addLessonToCourse(this.lessonToAdd, this.lessonToAdd.course_id)
        .subscribe({
          next: (response) => {
            console.log('Lesson Added succeccfully:', response);
            this.lessonForm.reset();
            this.lessonAdded.emit(true);
          },
          error: (error) => {
            console.error('Error:', error);
            //alert('Added Fiald');
            this.lessonAdded.emit(false);
          },
        });
    } else {
      alert('Invalid Form');
    }
  }
}
