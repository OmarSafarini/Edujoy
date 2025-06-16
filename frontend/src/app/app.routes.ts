import { Routes } from '@angular/router';
import { MainScreenComponent } from './moduls/main-screen/main-screen.component';
import { DonationScreenComponent } from './moduls/donation-screen/donation-screen.component';

export const routes: Routes = [
    { path: '', component: MainScreenComponent },
    { path: 'Donation' , component: DonationScreenComponent},
];
