import { ComponentFixture, TestBed } from '@angular/core/testing';

import { AddQuestionToLessonComponent } from './add-question-to-lesson.component';

describe('AddQuestionToLessonComponent', () => {
  let component: AddQuestionToLessonComponent;
  let fixture: ComponentFixture<AddQuestionToLessonComponent>;

  beforeEach(async () => {
    await TestBed.configureTestingModule({
      imports: [AddQuestionToLessonComponent]
    })
    .compileComponents();

    fixture = TestBed.createComponent(AddQuestionToLessonComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
