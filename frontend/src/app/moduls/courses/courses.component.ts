import { Component } from '@angular/core';
import { RouterModule } from '@angular/router';
import { CommonModule } from '@angular/common';
import { NavbarComponent } from '../navbar/navbar.component';
import { CoursesService } from '../../services/courses.service';
import { Course } from '../../models/course.model';
import { LoaderComponent } from '../loader/loader.component';
import { VoiceService } from '../../services/voice.service';

@Component({
  selector: 'app-courses',
  standalone: true,
  imports: [RouterModule, CommonModule, NavbarComponent,LoaderComponent],
  templateUrl: './courses.component.html',
  styleUrls: ['./courses.component.css']
})
export class CoursesComponent {

  courses: Course[] = [];

  // constructor(private coursesService: CoursesService) {
  //   this.coursesService.getAllCourses().subscribe(data => {
  //     this.courses = data;
  //     console.log(this.courses); //this should be deleted in the production
  //   });
  // }
  loading: boolean = true; 
  constructor(private coursesService: CoursesService,private voiceService: VoiceService) {
    this.loadCourses();
  }

  loadCourses() {
    this.loading = true;
    this.coursesService.getAllCourses().subscribe({
      next: (data) => {
        this.courses = data;
        this.loading = false;
      },
      error: () => {
        this.loading = false; 
      }
    });
  }
  speakCourse(course: any) {
    const text = course.description;
    this.voiceService.playText(text, "ar-SA");
  }
}
