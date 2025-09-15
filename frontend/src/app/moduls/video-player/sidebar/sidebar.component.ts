import { Component, Input } from '@angular/core';
import {Course} from '../../../models/course.model';
import {RouterModule} from '@angular/router';
import {CommonModule} from '@angular/common'; 


@Component({
  selector: 'app-sidebar',
  imports: [RouterModule, CommonModule],
  templateUrl: './sidebar.component.html',
  styleUrl: './sidebar.component.css'
})
export class SidebarComponent {
  @Input() course?:Course;
  @Input() selectedVideoId?:number;
  @Input() theamColor!: string;


}
