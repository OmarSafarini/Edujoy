import { Component } from '@angular/core';
import { RouterModule } from '@angular/router';
import { CommonModule } from '@angular/common';
import { NavbarComponent } from '../navbar/navbar.component';
import { CoursesService } from '../../services/courses.service';
import { Course } from '../../models/course.model';
import { FormsModule } from "@angular/forms";
import { LoaderComponent } from '../loader/loader.component';

@Component({
  selector: 'app-courses',
  standalone: true,
  imports: [RouterModule, CommonModule, NavbarComponent,LoaderComponent,FormsModule],
  templateUrl: './courses.component.html',
  styleUrls: ['./courses.component.css']
})
export class CoursesComponent  {

  courses: Course[] = [];
  allCourses: Course[] = [];

  searchText: string = '';

  // constructor(private coursesService: CoursesService) {
  //   this.coursesService.getAllCourses().subscribe(data => {
  //     this.courses = data;
  //     console.log(this.courses); //this should be deleted in the production
  //   });
  // }
  loading: boolean = true; 
  constructor(private coursesService: CoursesService) {
    this.getAllCourses();
  }

  getAllCourses(){
    this.coursesService.getAllCourses().subscribe(data => {
    this.courses = data;
    this.allCourses = data;
    for (let i = 0; i < this.courses.length; i++) {
      this.allCourses[i].level = this.getCourseGroup(i);
    }
    })
    this.searchText = '';
  };

  filterCourses() {
  if (this.searchText.trim() === '') {
    this.courses = this.allCourses; 
  } 
  else {
    this.courses = this.allCourses.filter(course =>
      course.name.toLowerCase().includes(this.searchText.toLowerCase())
    );
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
}
  getCourseGroup(i: number): number {
    return Math.ceil((i + 1) / 3);
  }

  filterByName(event: any) {
    this.searchText = event;
    this.filterCourses();
  }


}
