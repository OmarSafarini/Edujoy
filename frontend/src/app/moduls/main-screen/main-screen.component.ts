import { Component } from '@angular/core';
import { Router, RouterModule } from '@angular/router';

@Component({
  selector: 'app-main-screen',
  standalone: true,
  imports: [RouterModule],
  templateUrl: './main-screen.component.html',
  styleUrl: './main-screen.component.css'
})
export class MainScreenComponent {

  constructor(private router: Router) {}

  goToDonation() {
  this.router.navigate(['/Donation']);
}

}
