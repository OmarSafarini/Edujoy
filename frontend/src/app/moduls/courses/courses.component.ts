import { Component } from '@angular/core';
import { RouterModule } from '@angular/router';
import { CommonModule } from '@angular/common';
import { NavbarComponent } from '../navbar/navbar.component';

@Component({
  selector: 'app-courses',
  standalone: true,
  imports: [RouterModule, CommonModule, NavbarComponent],
  templateUrl: './courses.component.html',
  styleUrl: './courses.component.css'
})
export class CoursesComponent {
  Course: any[] = [
    { courseHeader: 'كورس 1: عربي', courseDescription: 'دورة لتعلم اللغة العربية من الأساسيات حتى المهارات المتقدمة، مناسبة للمبتدئين من جميع الأعمار، وتشمل القراءة، الكتابة، والنطق الصحيح.' },
    { courseHeader: 'كورس 1: انجليزي', courseDescription: 'دورة لتعلم اللغة الإنجليزية بأسلوب سهل وواضح، تشمل المفردات، القواعد، المحادثة، والاستماع.' },
    { courseHeader: 'كورس 1: رياضيات', courseDescription: 'أساسيات الرياضيات للطلاب المبتدئين، تشمل العمليات الحسابية والجبر والهندسة.' },
    { courseHeader: 'كورس 2: عربي', courseDescription: 'مستوى متوسط في اللغة العربية، يشمل القواعد المتقدمة، التعبير، وفهم النصوص.' },
    { courseHeader: 'كورس 2: انجليزي', courseDescription: 'مستوى متوسط في اللغة الإنجليزية، مناسب للذين لديهم أساسيات ويرغبون في تحسين مهاراتهم.' },
    { courseHeader: 'كورس 2: رياضيات', courseDescription: 'مفاهيم رياضية متقدمة تشمل المعادلات والمتباينات والدوال.' },
    { courseHeader: 'كورس 3: عربي', courseDescription: 'مستوى متقدم في اللغة العربية مع تدريبات مكثفة على التعبير والتحليل الأدبي.' },
    { courseHeader: 'كورس 3: انجليزي', courseDescription: 'مستوى متقدم في اللغة الإنجليزية يركز على مهارات الكتابة والقراءة الأكاديمية.' },
    { courseHeader: 'كورس 3: رياضيات', courseDescription: 'التحضير لمادة الرياضيات في المرحلة الثانوية أو الجامعية.' },
    { courseHeader: 'كورس 4: عربي', courseDescription: 'لغة عربية تخصصية للمجالات المهنية والأكاديمية.' },
    { courseHeader: 'كورس 4: انجليزي', courseDescription: 'اللغة الإنجليزية لأغراض العمل والدراسة في الخارج.' },
    { courseHeader: 'كورس 4: رياضيات', courseDescription: 'الرياضيات التطبيقية والهندسية.' }
  ];
}
