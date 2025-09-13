// import { Lesson } from "./lesson.model";

import { Lesson } from "./lesson.model";

export interface Course{
    id: number;
    level: number;
    name: string;
    description: string;
    lessons:Lesson[];
}