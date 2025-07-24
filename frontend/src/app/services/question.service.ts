import { Injectable } from '@angular/core';
import { HttpClient } from '@angular/common/http';
import { Observable } from 'rxjs';

@Injectable({
  providedIn: 'root'
})
export class QuestionService {

  private apiUrl = 'http://127.0.0.1:8000/api/lesson/'; 

  constructor(private http: HttpClient) { }

  getQuestionsWithAnswers(lessonId: any) {
    return this.http.get(`${this.apiUrl}${lessonId}/questions`);
  }
}