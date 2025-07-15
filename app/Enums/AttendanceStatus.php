<?php
enum AttendanceStatus: string
{
    case WaitingTriage = 'waiting_triage';
    case WaitingConsultation = 'waiting_consultation';
    case Finished = 'finished';
    case Cancelled = 'cancelled';
}