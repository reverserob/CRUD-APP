@extends('layouts.master')

@section('content')

    <h1>Welcome Home</h1>
    <p class="lead">
        Have you got colour in your cheeks?
        Do you ever get that fear that you can't shift
        The type that sticks around like something in your teeth?
        Are there some aces up your sleeve?
        Have you no idea that you're in deep?
        I dreamt about you nearly every night this week
        How many secrets can you keep?
        'Cause there's this tune I found that makes me think of you somehow and I play it on repeat
        Until I fall asleep
        Spilling drinks on my settee

        (Do I wanna know)
        If this feeling flows both ways?
        (Sad to see you go)
        Was sort of hoping that you'd stay
        (Baby we both know)
        That the nights were mainly made for saying things that you can't say tomorrow day

        Crawling back to you

        Ever thought of calling when you've had a few?
        'Cause I always do
        Maybe I'm too busy being yours to fall for somebody new
        Now I've thought it through

        Crawling back to you

        So have you got the guts?
        Been wondering if your heart's still open and if so I wanna know what time it shuts
        Simmer down and pucker up
        I'm sorry to interrupt. It's just I'm constantly on the cusp of trying to kiss you
        I don't know if you feel the same as I do
        But we could be together if you wanted to

        (Do I wanna know?)
        If this feeling flows both ways?
        (Sad to see you go)
        Was sort of hoping that you'd stay
        (Baby we both know)
        That the nights were mainly made for saying things that you can't say tomorrow day

        Crawling back to you (crawling back to you)


    </p>

    <hr>

    <a href="{{ route('tasks.index') }}" class="btn btn-info">View Tasks</a>
    <a href="{{ route('tasks.create') }}" class="btn btn-primary">Add New Task</a>

@stop