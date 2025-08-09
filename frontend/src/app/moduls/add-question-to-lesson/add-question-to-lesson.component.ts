import { Component, Input, Output, EventEmitter } from '@angular/core';
import { QuestionService } from '../../services/question.service';
import { FormsModule } from '@angular/forms';

@Component({
  selector: 'app-add-question-to-lesson',
  imports: [FormsModule],
  standalone: true,
  templateUrl: './add-question-to-lesson.component.html',
  styleUrls: ['./add-question-to-lesson.component.css']
})
export class AddQuestionToLessonComponent {
  @Input() lessonId!: number;
  @Output() formSubmitted = new EventEmitter<void>(); 

  questionBody = '';
  answers = [
    { text: '', isCorrect: false },
    { text: '', isCorrect: false },
    { text: '', isCorrect: false },
    { text: '', isCorrect: false }
  ];

  constructor(private questionService: QuestionService) {}

  onSubmit() {
    const question = {
      questionBody: this.questionBody,
      lessonId: this.lessonId,
      answers: this.answers
    };

    console.log('بيانات الإرسال:', question);
    console.log('الرد:', this.lessonId);  

    this.questionService.addQuestion(question).subscribe({
      next: (res) => {
        alert('تمت الإضافة بنجاح');
      
        this.questionBody = '';
        this.answers = [
          { text: '', isCorrect: false },
          { text: '', isCorrect: false },
          { text: '', isCorrect: false },
          { text: '', isCorrect: false }
        ];
        this.formSubmitted.emit();
      },
      error: (err) => {
        alert('فشل الإرسال');
        console.error(err);
      }
    });
  }


}
