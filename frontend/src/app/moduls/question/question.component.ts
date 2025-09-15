import { Component } from '@angular/core';
import { CommonModule } from '@angular/common';
import { QuestionService } from '../../services/question.service';
import { AddQuestionToLessonComponent } from '../add-question-to-lesson/add-question-to-lesson.component';
import { ActivatedRoute } from '@angular/router';

@Component({
  selector: 'app-question',
  standalone: true,
  imports: [CommonModule , AddQuestionToLessonComponent],
  templateUrl: './question.component.html',
  styleUrls: ['./question.component.css']
})
export class QuestionComponent {
  questionData: any = {}; 
  questions: any[] = []; 
  questionsGrouped: any[][] = [];
  lessonHeader: string = '';
  choices = ['A', 'B', 'C', 'D'];
  usersAnswer: { Question: string; Answer: string }[] = [];
  resultMessage = '';
  lessonId: number = 1;

  constructor(private questionService: QuestionService, private route: ActivatedRoute) {
    this.lessonId = this.route.snapshot.params['lessonId'];
    this.questionService.getQuestionsWithAnswers(this.lessonId).subscribe(data => {
      this.questionData = data;
      console.log(data);
      this.lessonHeader = this.questionData.name;
      this.questions = this.questionData.questions.flatMap((q: any) =>
        q.answers.map((a: any) => ({
          ...a,
          question_body: q.question_body
        }))
      );
      this.questionsGrouped = this.groupQuestions(this.questions);
    });
  }

  groupQuestions(questions: any[]) {
    const grouped = [];
    for (let i = 0; i < questions.length; i += 4) {
      grouped.push(questions.slice(i, i + 4));
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
    if (this.isAnswersSelectedBeforeForQuestion(Question))
      this.popWantedQuestionFromUserAnswer(Question);
    this.usersAnswer.push({ Question, Answer });
  }

  onSubmitClick() {
    let counter = 0;
    const correctMap = new Map<string, string>();
    this.questionData.questions.forEach((q: any) => {
      const correct = q.answers.find((a: any) => a.is_true);
      console.log(correct)
      if (correct) correctMap.set(q.question_body, correct.answer_body);
    });
    
    this.usersAnswer.forEach(user => {
      console.log(correctMap.get(user.Question));
      if (correctMap.get(user.Question) === user.Answer) counter++;
    });

    this.resultMessage = `أجبت على ${counter} من أصل ${this.questionData.questions.length} إجابة صحيحة.`;
    const modal = new (window as any).bootstrap.Modal(document.getElementById('resultModal'));
    modal.show();
    this.usersAnswer = [];
  }

  openModal() {
    const modal = new (window as any).bootstrap.Modal(document.getElementById('addQuestionModal'));
    modal.show();
  }

  closeModal() {
  const modalEl = document.getElementById('addQuestionModal');
  if (modalEl) {
    const modal = (window as any).bootstrap.Modal.getInstance(modalEl);
    modal?.hide();
  }
}
}
