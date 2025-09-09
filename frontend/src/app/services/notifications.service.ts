import { HttpClient } from '@angular/common/http';
import { Injectable } from '@angular/core';
import { Notification } from '../models/notification.model';
import { Observable } from 'rxjs';


@Injectable({
  providedIn: 'root'
})
export class NotificationService {
  private apiUrl = 'http://localhost:8000/api/notifications'; 
  constructor(private http: HttpClient) {}

  getNotifications(): Observable<Notification[]> {
    return this.http.get<Notification[]>(this.apiUrl);
  }

  markAsRead(id: number) {
    return this.http.put(`${this.apiUrl}/${id}/read`, {});
  }

  markAllAsRead() {
    return this.http.put(`${this.apiUrl}/allRead`, {});
  }

  deleteNotification(id: number) {
    return this.http.delete(`${this.apiUrl}/${id}`);
  }
}
