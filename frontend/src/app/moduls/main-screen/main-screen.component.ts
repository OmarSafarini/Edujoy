import { Component } from '@angular/core';
import { Router, RouterModule } from '@angular/router';
import { CommonModule } from '@angular/common';
import { NavbarComponent } from '../navbar/navbar.component';

@Component({
  selector: 'app-main-screen',
  standalone: true,
  imports: [RouterModule , NavbarComponent , CommonModule],
  templateUrl: './main-screen.component.html',
  styleUrl: './main-screen.component.css'
})
export class MainScreenComponent {

  constructor(private router: Router) {}

  goToDonation() {
  this.router.navigate(['/Donation']);
}

}
