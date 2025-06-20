import { Routes } from '@angular/router';
import { LessonsListComponent } from './lessons-list/lessons-list.component';
import { VideoPlayerComponent } from './video-player/video-player.component';

export const routes: Routes = [
    {path:'lessons' , component : LessonsListComponent},
    { path: 'video/:videoId', component: VideoPlayerComponent },

];
