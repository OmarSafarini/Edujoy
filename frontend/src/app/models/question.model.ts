export interface Question {
  id: number;
  lesson_id: number;
  lesson: string;
  question_body: string;
  answer_body: string;
  is_true: boolean;
}