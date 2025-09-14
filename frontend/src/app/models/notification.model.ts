export interface Notification {
  id: number;
  title: string;
  body: string;
  read_at: string | null;
  created_at: string;
  read_status: string;
}