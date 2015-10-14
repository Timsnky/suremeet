<p>Hello,</p>
</br>
<p><b>Details of Cancelled Presentation:</b></p>
<p>Date: {{ $meeting->date }}</p>
<p>Title: {{ $meeting->title }}</p>
<p>Presenter: {{ $meeting->user->firstname .' '. $meeting->user->lastname }}</p>
<p>Presenter Email: {{ $meeting->user->email }}</p>
</br>
<p><i>Regards,</i></p>
<p><i>Your Trusted Friend, SureMeet</i></p>
