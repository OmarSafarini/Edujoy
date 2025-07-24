import { ComponentFixture, TestBed } from '@angular/core/testing';

import { AddVideoToLessonComponent } from './add-video-to-lesson.component';

describe('AddVideoToLessonComponent', () => {
  let component: AddVideoToLessonComponent;
  let fixture: ComponentFixture<AddVideoToLessonComponent>;

  beforeEach(async () => {
    await TestBed.configureTestingModule({
      imports: [AddVideoToLessonComponent]
    })
    .compileComponents();

    fixture = TestBed.createComponent(AddVideoToLessonComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
