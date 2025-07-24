import { Component, EventEmitter, Input, OnInit, Output } from '@angular/core';
import {ReactiveFormsModule, FormControl, FormGroup } from '@angular/forms';
import { LessonsService } from '../services/lessons.service';
import { Video } from '../models/video.model';

@Component({
  selector: 'app-add-video-to-lesson',
  imports: [ReactiveFormsModule],
  templateUrl: './add-video-to-lesson.component.html',
  styleUrl: './add-video-to-lesson.component.css'
})
export class AddVideoToLessonComponent implements OnInit
{

  videoForm !: FormGroup;
  @Input() lessonId!: number;

  @Output() onBack = new EventEmitter<boolean>();
    
  goBack() {
   this.onBack.emit(true);
  }

  constructor(private lessonsService:LessonsService){}


  videoToAdd !: Video


  ngOnInit(): void {

    this.videoForm = new FormGroup({
      videoTitle : new FormControl(""),
      videoUrl : new FormControl("")
    });

    console.log(this.videoForm.value);
  }

  onSubmit() {
    if (this.videoForm.valid) {
      this.videoToAdd = {
        id:0,
        title: this.videoForm.value.videoTitle,
        video_url: this.videoForm.value.videoUrl,
        lesson_id: this.lessonId
      };

      this.lessonsService.addVideoToLesson(this.videoToAdd).subscribe({
        next: (response) => {
          console.log('Video Added succeccfully:', response);
          this.videoForm.reset();
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
