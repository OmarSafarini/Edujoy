import { Injectable } from "@angular/core";
import { HttpClient } from "@angular/common/http";
import { Observable } from "rxjs";
import { Course } from '../models/course.model';
import { Lesson } from '../models/lesson.model';

@Injectable({
  providedIn: 'root'
})

export class CourseService {
  
  private baseUrl = 'http://127.0.0.1:8000/api'
  constructor(private http: HttpClient) {}

  addLessonToCourse(lesson: Lesson, courseId: number) {
    const addLessonsToCourseUrl = `${this.baseUrl}/courses/${courseId}/lessons`
    return this.http.post<Lesson>(addLessonsToCourseUrl, lesson);
  }
}