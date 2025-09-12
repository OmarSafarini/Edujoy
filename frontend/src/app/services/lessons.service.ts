import { Injectable } from '@angular/core';
import { HttpClient } from '@angular/common/http';
import { Observable } from 'rxjs';
import { Course } from '../models/course.model';
import { Video } from '../models/video.model';

@Injectable({
  providedIn: 'root'
})

export class LessonsService {
  private baseUrl = 'http://127.0.0.1:8000/api';

  constructor(private http: HttpClient) {}

  getCourseWithLessons(courseId: number): Observable<Course[]> {
    const courseDetailsUrl = `${this.baseUrl}/courses/${courseId}`
    return this.http.get<Course[]>(courseDetailsUrl);
  }
  

  addVideoToLesson(video: Video){
    const addVideoToLessonUrl = `${this.baseUrl}/lessons/${video.lesson_id}/videos`
    return this.http.post<Video>(addVideoToLessonUrl,video);
  }


}
