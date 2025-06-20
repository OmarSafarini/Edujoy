// import { Lesson } from "./lesson.model";

import { Lesson } from "./lesson.model";

export interface Course{
    id: number;
    name: string;
    lessons:Lesson[];
}