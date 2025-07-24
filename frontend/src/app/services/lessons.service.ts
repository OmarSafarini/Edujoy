import { Injectable } from '@angular/core';
import { HttpClient } from '@angular/common/http';
import { Observable } from 'rxjs';
import { Course } from '../models/course.model';
import { Video } from '../models/video.model';

@Injectable({
  providedIn: 'root'
})

export class LessonsService {
  private apiUrl = 'http://127.0.0.1:8000/api/courses';

  constructor(private http: HttpClient) {}

  getCourseWithLessons(courseId: number): Observable<Course[]> {
    return this.http.get<Course[]>(`${this.apiUrl}/${courseId}`);
  }
  

    addVideoToLesson(video: Video){
    return this.http.post<Video>(`http://127.0.0.1:8000/api/lesson/${video.lesson_id}`, video);
  }


}
