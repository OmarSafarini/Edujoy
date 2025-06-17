import { Component, OnInit } from '@angular/core';
import { FormBuilder, FormGroup, Validators, ReactiveFormsModule } from '@angular/forms';
import { CommonModule } from '@angular/common'; 
import { RouterModule } from '@angular/router';

@Component({
  selector: 'app-donation-screen',
  standalone: true,
  imports: [ReactiveFormsModule, CommonModule, RouterModule],
  templateUrl: './donation-screen.component.html',
  styleUrls: ['./donation-screen.component.css']
})
export class DonationScreenComponent implements OnInit {
  donationForm!: FormGroup;
  cvvFocused = false;

  constructor(private fb: FormBuilder) {}

  ngOnInit(): void {
    this.donationForm = this.fb.group({
      cardNumber: ['', [Validators.required , Validators.pattern(/^(\d{4}-){3}\d{4}$/)]],
      donorName: ['', [Validators.required]],
      cvv: ['', [Validators.required, Validators.pattern(/^\d{3,4}$/)]],
      expiryMonth: ['', [Validators.required, Validators.pattern(/^(0?[1-9]|1[0-2])$/)]],
      expiryYear: ['', [Validators.required, Validators.pattern(/^\d{4}$/)]],
      amount: ['', [Validators.required, Validators.pattern(/^[1-9]\d*$/)]],
    });

    this.donationForm.get('cvv')?.valueChanges.subscribe((val: string) => {
      this.cvvFocused = val?.trim()?.length > 0;
    });
  }

  onSubmit(): void {
    if (!this.donationForm.valid) {
      alert('The fields should be all completed');
    } else {
      console.log('Donation data:', this.donationForm.value);
    }
  }

  formatCardNumber(event: any) {
    let value = event.target.value.replace(/\D/g, '');
    let formatted = '';
    for (let i = 0; i < value.length; i++) {
      if (i > 0 && i % 4 === 0) formatted += '-';
      formatted += value[i];
    }
    event.target.value = formatted;
    this.donationForm.controls['cardNumber'].setValue(formatted);
  }
}
