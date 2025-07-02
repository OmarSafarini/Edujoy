import { Routes } from '@angular/router';
import { MainScreenComponent } from './moduls/main-screen/main-screen.component';
import { DonationScreenComponent } from './moduls/donation-screen/donation-screen.component';
import { LessonsListComponent } from './lessons-list/lessons-list.component';
import { VideoPlayerComponent } from './video-player/video-player.component';

export const routes: Routes = [
    { path: '', component: MainScreenComponent },
    { path: 'Donation' , component: DonationScreenComponent},
    {path:'lessons' , component : LessonsListComponent},
    { path: 'video/:videoId', component: VideoPlayerComponent },
];
