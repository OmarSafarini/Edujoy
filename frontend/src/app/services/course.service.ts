import { Injectable } from '@angular/core';
import { HttpClient } from '@angular/common/http';
import { Observable } from 'rxjs';
import { Course } from '../models/course.model';
import { Lesson } from '../models/lesson.model';

@Injectable({
  providedIn: 'root',
})
export class CourseService {
  constructor(private http: HttpClient) {}

  addLessonToCourse(lesson: Lesson, courseId: number) {
    return this.http.post<Lesson>(
      `http://127.0.0.1:8000/api/courses/${courseId}`,
      lesson
    );
  }
}
