import { Component } from '@angular/core';
import { CommonModule } from '@angular/common';
import { Question } from '../../models/question.model';

@Component({
  selector: 'app-question',
  standalone: true,
  imports: [CommonModule],
  templateUrl: './question.component.html',
  styleUrls: ['./question.component.css']
})
export class QuestionComponent {
  questionData: Question[] = [
    { id: 1, lesson_id: 1, lesson: 'معلومات حول كوكو', question_body: 'من هو كوكو', answer_body: 'كوكو', is_true: false },
    { id: 2, lesson_id: 1, lesson: 'معلومات حول كوكو', question_body: 'من هو كوكو', answer_body: 'محمد ابو كوكو', is_true: true },
    { id: 3, lesson_id: 1, lesson: 'معلومات حول كوكو', question_body: 'من هو كوكو', answer_body: 'كوكو واوا', is_true: false },
    { id: 4, lesson_id: 1, lesson: 'معلومات حول كوكو', question_body: 'من هو كوكو', answer_body:'كوكو ابن ابو علي', is_true: false },

    { id: 5, lesson_id: 1, lesson: 'معلومات حول كوكو', question_body: 'اين يعيش كوكو', answer_body: 'في الغابة', is_true: true },
    { id: 6, lesson_id: 1, lesson: 'معلومات حول كوكو', question_body: 'اين يعيش كوكو', answer_body: 'في المريخ', is_true: false },
    { id: 7, lesson_id: 1, lesson: 'معلومات حول كوكو', question_body: 'اين يعيش كوكو', answer_body: 'في البحر', is_true: false },
    { id: 8, lesson_id: 1, lesson: 'معلومات حول كوكو', question_body: 'اين يعيش كوكو', answer_body: 'في المدينة', is_true: false },
  ];

  choices = ['A', 'B', 'C', 'D'];
  usersAnswer: { Question: string; Answer: string }[] = [];
  questionsGrouped = this.groupQuestions();
  resultMessage = ''; 
  
  groupQuestions() {
    const grouped = [];
    for (let i = 0; i < this.questionData.length; i += 4) {
      grouped.push(this.questionData.slice(i, i + 4));
    }
    return grouped;
  }

  isAnswersSelectedBeforeForQuestion(question: string) {
    return this.usersAnswer.find(q => q.Question === question);
  }

  isAnswerSelected(question: string, answer: string): boolean {
  return this.usersAnswer.some(q => q.Question === question && q.Answer === answer);
}

  popWantedQuestionFromUserAnswer(question: string) {
    this.usersAnswer = this.usersAnswer.filter(q => q.Question !== question);
  }

  onChoiceClick(Question: string, Answer: string) {
    if(this.isAnswersSelectedBeforeForQuestion(Question))
      this.popWantedQuestionFromUserAnswer(Question);
    this.usersAnswer.push({ Question, Answer });
    console.log(this.usersAnswer); // delete when you are done with the testing
  }
  
  onSubmitClick() {
  let counter = 0;

  for (const group of this.questionsGrouped) {
    const questionText = group[0].question_body;
    const userAnswer  = this.usersAnswer.find(u => u.Question === questionText);
    if (userAnswer) {
      const correctAnswer = group.find(ans => ans.is_true);
      if (correctAnswer && correctAnswer.answer_body === userAnswer.Answer) {
        counter++;
      }
    }
  }
    this.resultMessage = `أجبت على ${counter}  من اصل ${this.questionsGrouped.length} إجابة صحيحة.`;

  // Show modal
  const modal = new (window as any).bootstrap.Modal(document.getElementById('resultModal'));
  modal.show();

  this.usersAnswer = [];
}
}
