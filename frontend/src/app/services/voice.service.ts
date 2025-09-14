import { Injectable } from '@angular/core';
import { HttpClient, HttpHeaders } from '@angular/common/http';

@Injectable({
  providedIn: 'root'
})
export class VoiceService {
  private apiUrl = 'http://localhost:8000/api/tts';

  constructor(private http: HttpClient) {}

  playText(text: string): void {
    if (!text || !text.trim()) return;

    const headers = new HttpHeaders({ 'Content-Type': 'application/json' });

    this.http.post(this.apiUrl, { text }, { headers, responseType: 'blob' })
      .subscribe({
        next: (response) => {
          const url = URL.createObjectURL(response);
          const audio = new Audio(url);
          audio.play();
        },
        error: (err) => console.error('Voice API error:', err)
      });
  }
}
