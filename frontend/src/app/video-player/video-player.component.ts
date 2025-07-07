import { Component, OnInit } from '@angular/core';
import { ActivatedRoute } from '@angular/router';
import { Course } from '../models/course.model';
import { LessonsService } from '../services/lessons.service';
import { RouterModule } from '@angular/router';
import { CommonModule } from '@angular/common';
import { Params } from '@angular/router';
import { DomSanitizer, SafeResourceUrl } from '@angular/platform-browser';
import {SidebarComponent} from './sidebar/sidebar.component';

@Component({
  selector: 'app-video-player',
  imports: [RouterModule, CommonModule, SidebarComponent],
  templateUrl: './video-player.component.html',
  styleUrl: './video-player.component.css'
  
})

export class VideoPlayerComponent implements OnInit {
  // videoUrl: string = '';
  sanitizedVideoUrl?: SafeResourceUrl;
  videoTitle: string = '';
  videoId!: number;
  lessonId!: number;
  course!: Course;

  constructor(
    private route: ActivatedRoute,
    private lessonsService: LessonsService,
    private sanitizer: DomSanitizer
  ) {}

  ngOnInit() {
    this.route.params.subscribe((params: Params) => {
      this.videoId = +params['videoId'];
      this.lessonId = Number(this.route.snapshot.queryParamMap.get('lessonId'));

      this.loadVideo(this.videoId, this.lessonId);
    });
  }

  loadVideo(videoId: number, lessonId: number) {
    this.lessonsService.getCourseWithLessons(lessonId).subscribe({
      next: (res: any) => {
        this.course = res[0];


        for (const lesson of this.course.lessons) {
          for (const video of lesson.videos) {
            if (video.id === videoId) {
              // this.videoUrl = video.video_url;
              this.videoTitle = video.title;
              this.sanitizedVideoUrl = this.sanitizeYouTubeUrl(video.video_url);
              return;
            }
          }
        }
      },
      error: (err:any) => {
        console.error('Failed to load video data', err);
      }
    });
  }

  sanitizeYouTubeUrl(url: string): SafeResourceUrl {
    const videoId = this.getYouTubeVideoId(url);
    if (!videoId) {
      console.log('Invalid YouTube URL:', url);
      return '';
    }
    const embedUrl = `https://www.youtube.com/embed/${videoId}`;
    return this.sanitizer.bypassSecurityTrustResourceUrl(embedUrl);
  }

  getYouTubeVideoId(url: string): string | null {
    const regExp = /^.*(?:youtu.be\/|v\/|u\/\w\/|embed\/|watch\?v=|&v=)([^#&?]*).*/;
    const match = url.match(regExp);
    console.log(match);
    return (match && match[1].length === 11) ? match[1] : null;
  }
}
