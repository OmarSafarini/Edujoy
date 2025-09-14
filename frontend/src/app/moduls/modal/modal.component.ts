import { CommonModule } from '@angular/common';
import { Component, Input } from '@angular/core';

@Component({
  selector: 'app-modal',
  imports: [CommonModule],
  templateUrl: './modal.component.html',
  styleUrls: ['./modal.component.css']
})
export class ModalComponent {
  @Input() title: string = 'إشعار';
  @Input() message: string = 'تمت العملية بنجاح!';
  @Input() type: 'success' | 'error' | 'warning' = 'success';

  isOpen = false;

  open() {
    this.isOpen = true;
  }

  close() {
    this.isOpen = false;
  }
  speak(text: string) {
  if ('speechSynthesis' in window) {
    const utterance = new SpeechSynthesisUtterance(text);

    // اختاري اللغة والصوت
    utterance.lang = "ar-SA"; // للعربي
    // utterance.lang = "en-US"; // للإنجليزي

    utterance.rate = 1;   // سرعة القراءة (1 طبيعي)
    utterance.pitch = 1;  // حدة الصوت

    window.speechSynthesis.speak(utterance);
  } else {
    console.error("المتصفح لا يدعم SpeechSynthesis API");
  }
}


}
