import { Video } from "./video.model";

export interface Lesson{
    id: number;
    course_id: number;
    name: string;
    videos: Video[];
}