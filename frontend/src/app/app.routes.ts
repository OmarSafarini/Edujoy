import { Routes } from '@angular/router';
import { LessonsListComponent } from './moduls/lessons-list/lessons-list.component';
import { VideoPlayerComponent } from './moduls/video-player/video-player.component';
import { MainScreenComponent } from './moduls/main-screen/main-screen.component';
import { DonationScreenComponent } from './moduls/donation-screen/donation-screen.component';
import { CoursesComponent } from './moduls/courses/courses.component';
import { QuestionComponent } from './moduls/question/question.component';
import {AddVideoToLessonComponent} from './add-video-to-lesson/add-video-to-lesson.component';


export const routes: Routes = [
    { path: '', component: MainScreenComponent },
    { path: 'lessons' , component : LessonsListComponent},
    { path: 'video/:videoId', component: VideoPlayerComponent },
    { path: 'donation' , component: DonationScreenComponent},
    { path: 'course', component : CoursesComponent },
    { path: 'question', component: QuestionComponent }  // it should be deleted after the configuration
    {path: 'addVideo', component: AddVideoToLessonComponent},
];
