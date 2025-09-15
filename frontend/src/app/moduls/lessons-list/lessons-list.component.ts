import { Component, OnInit, ViewChild } from '@angular/core';
import { LessonBlockComponent } from './lesson-block/lesson-block.component';
import { Course } from '../../models/course.model';
import { LessonsService } from '../../services/lessons.service';
import { CommonModule } from '@angular/common';
import { AddLessonToCourseComponent } from '../add-lesson-to-course/add-lesson-to-course.component';
import { ActivatedRoute } from '@angular/router';
import { LoaderComponent } from '../loader/loader.component';

interface CourseTheme {
  color: string;
  imageUrl: string;
}

@Component({
  selector: 'app-lessons-list',
  imports: [LessonBlockComponent, CommonModule, AddLessonToCourseComponent, LoaderComponent],
  templateUrl: './lessons-list.component.html',
  styleUrl: './lessons-list.component.css',
})
export class LessonsListComponent implements OnInit
{
  @ViewChild('lessonModal') lessonModal!: ModalComponent;


  course !: Course;
  courseId: number = 0;

  isLessonFormOpen: boolean = false;
  constructor(
    private lessonsService: LessonsService,
    private route: ActivatedRoute
  ) {}

  ngOnInit() {
    this.courseId = Number(this.route.snapshot.paramMap.get('courseId'));

    this.lessonsService.getCourseWithLessons(this.courseId).subscribe({
      next: (res: any) => {
        this.course = res[0];
        console.log(this.course?.id);
      },
    });
  }
  openLessonForm() {
    this.isLessonFormOpen = !this.isLessonFormOpen;
  }

  loadCourse() {
  this.lessonsService.getCourseWithLessons(this.courseId).subscribe({
    next: (res: any) => {
      this.course = res[0];
    },
  });
}

  onLessonAdded(success: boolean) {
    if (success) {
      this.lessonModal.title = 'نجاح';
      this.lessonModal.message = 'تمت إضافة الدرس بنجاح!';
      this.lessonModal.type = 'success';
      this.loadCourse(); // لتحديث قائمة الدروس
    } else {
      this.lessonModal.title = 'فشل';
      this.lessonModal.message = 'حدث خطأ أثناء إضافة الدرس!';
      this.lessonModal.type = 'error';
    }
    this.lessonModal.open();
  }
  
  getCourseTheme(courseId: number | undefined): CourseTheme {
    if (!courseId) {
      return {
        color: 'white',
        imageUrl: '',
      };
    }

    if (courseId === 1) {
      return {
        color: '#a51212ff',
        imageUrl: 'https://www.amankids.com/static/images/800x450/87c1a229c1bad62dc5f3992413b1d46b.jpg',
      };
    } else if (courseId === 4) {
      return {
        color: '#a51212ff',
        imageUrl:
          'https://i.pinimg.com/474x/53/f4/65/53f465d36595ae527820d41879a2590c.jpg',
      };
    } else if (courseId === 7) {
      return {
        color: '#a51212ff',
        imageUrl:
          'https://www.alnaeem-news.iq/wp-content/uploads/2024/12/%D8%B5%D9%88%D8%B1%D8%A9-%D9%85%D9%8A%D8%AF%D8%A7%D9%86-2021-03-01T135918.314.png',
      };
    } else if (courseId === 2) {
      return {
        color: '#1d44d1ff',
        imageUrl:
          'https://thewriteress.com/wp-content/uploads/2022/05/Best-Channels-for-learning-english-for-kids-on-youtube.jpg',
      };

    } else if (courseId === 5) {
      return {
        color: '#1d44d1ff',
        imageUrl:
          'https://thewriteress.com/wp-content/uploads/2021/05/Apps-for-learning-english-through-pictures-on-android.jpg',
      };
    } else if (courseId === 8) {
      return {
        color: '#1d44d1ff',
        imageUrl:
          'https://i0.wp.com/elmuntafabeh.com/wp-content/uploads/2020/01/585.jpg?resize=700%2C466&ssl=1',
      };
    } else if (courseId === 3) {
      return {
        color: 'rgba(249, 121, 0, 0.87)',
        imageUrl:
          'https://play-lh.googleusercontent.com/Gb8tjW38freMZ58UuK0yg0XOSH-J6V1LVQC1o3MxbAm_PKGJkjeqWxmyvlSlAvq7MO9x=w1080',
      };
    } else if (courseId === 6) {
      return {
        color: 'rgba(249, 121, 0, 0.87)',
        imageUrl:
          'https://play-lh.googleusercontent.com/_B6IiPtcPplkTxqcSZSVdk9zNsQ_7txJTGTpfbhpEUzclfwAlYekAD_8PXL5yhNE3ko=w1080',
      };
    } else {
      return {
        color: 'rgba(249, 121, 0, 0.87)',
        imageUrl:
          'https://modo3.com/thumbs/fit630x300/80640/1631429225/%D8%AA%D8%A7%D8%B1%D9%8A%D8%AE_%D8%A7%D9%84%D8%B1%D9%8A%D8%A7%D8%B6%D9%8A%D8%A7%D8%AA.jpg',
      };
    }
  }

  
}
