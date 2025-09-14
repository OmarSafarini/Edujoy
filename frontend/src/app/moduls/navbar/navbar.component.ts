import { Component, Input } from '@angular/core';
import { Router, RouterModule } from '@angular/router';
import { CommonModule } from '@angular/common';

@Component({
  selector: 'app-navbar',
  imports: [CommonModule, RouterModule],
  templateUrl: './navbar.component.html',
  styleUrl: './navbar.component.css'
})
export class NavbarComponent {
  @Input() profileImageUrl: string | null = null;
    defaultProfileImage = 'https://upload.wikimedia.org/wikipedia/commons/9/99/Sample_User_Icon.png?20200919003010'; // صورة افتراضية
    //userId: number | undefined;
    userId=1;//tempp
  constructor(private router: Router) {
    const nav = this.router.getCurrentNavigation();
    this.userId = nav?.extras.state?.['id'];
  }
  userPhoto?: string;
  get displayImage(): string {
    return this.profileImageUrl || this.defaultProfileImage;
  }
}
