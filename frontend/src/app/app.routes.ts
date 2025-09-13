import { Routes } from '@angular/router';
import { LessonsListComponent } from './moduls/lessons-list/lessons-list.component';
import { VideoPlayerComponent } from './moduls/video-player/video-player.component';
import { MainScreenComponent } from './moduls/main-screen/main-screen.component';
import { DonationScreenComponent } from './moduls/donation-screen/donation-screen.component';
import { CoursesComponent } from './moduls/courses/courses.component';
import { QuestionComponent } from './moduls/question/question.component';
import { AddVideoToLessonComponent } from './moduls/add-video-to-lesson/add-video-to-lesson.component';
import { NotificationListComponent } from './moduls/notifications/notifications.component';
import { ProfilePageComponent } from './moduls/profile-page/profile-page.component';
import { DesignComponent } from './moduls/design/design.component';

export const routes: Routes = [
  { path: '', component: MainScreenComponent },
  { path: 'course/:courseId', component: LessonsListComponent },
  { path: 'course/:courseId/video/:videoId', component: VideoPlayerComponent, runGuardsAndResolvers: 'paramsOrQueryParamsChange' },
  { path: 'donation', component: DonationScreenComponent },
  { path: 'course', component: CoursesComponent },
  { path: 'question/:lessonId', component: QuestionComponent }, // it should be deleted after the configuration
  { path: 'addVideo', component: AddVideoToLessonComponent },
  {path:'notifications',component:NotificationListComponent},
  {path:'profile/:id', component: ProfilePageComponent},
  {path:'design',component: DesignComponent},
];
