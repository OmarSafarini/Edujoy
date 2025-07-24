import { Routes } from '@angular/router';
import { LessonsListComponent } from './lessons-list/lessons-list.component';
import { VideoPlayerComponent } from './video-player/video-player.component';
import {AddVideoToLessonComponent} from './add-video-to-lesson/add-video-to-lesson.component';

export const routes: Routes = [

    {path:'lessons' , component : LessonsListComponent},
    { path: 'video/:videoId', component: VideoPlayerComponent },
    {path: 'addVideo', component: AddVideoToLessonComponent},

    
];
