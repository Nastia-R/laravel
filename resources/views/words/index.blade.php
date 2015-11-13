@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="col-sm-offset-2 col-sm-8">
            <div class="panel panel-default">
                <div class="panel-heading">
                    New Word
                </div>

                <div class="panel-body">
                    <!-- Display Validation Errors -->
                    @include('common.errors')

                    <!-- New Word Form -->
                    <form action="/word" method="POST" class="form-horizontal">
                        {{ csrf_field() }}

                        <!-- Word -->
                        <div class="form-group">
                            <label for="word" class="col-sm-3 control-label">Word</label>

                            <div class="col-sm-6">
                                <input type="text" name="word" id="word" class="form-control" value="{{ old('word') }}">
                            </div>
                        </div>

                        <!-- Description -->
                        <div class="form-group">
                            <label for="description" class="col-sm-3 control-label">Description</label>

                            <div class="col-sm-6">
                                <input type="text" name="description" id="description" class="form-control" value="{{ old('word') }}">
                            </div>
                        </div>

                        <!-- Translate -->
                        <div class="form-group">
                            <label for="translate" class="col-sm-3 control-label">Translate</label>

                            <div class="col-sm-6">
                                <input type="text" name="translate" id="translate" class="form-control" value="{{ old('word') }}">
                            </div>
                        </div>

                        <!-- Add Word Button -->
                        <div class="form-group">
                            <div class="col-sm-offset-3 col-sm-6">
                                <button type="submit" class="btn btn-default">
                                    <i class="fa fa-plus"></i>Add Word
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

            <!-- Existing Words table-->
            @if (count($words) > 0)
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Words
                    </div>

                    <div class="panel-body">
                        <table class="table table-striped task-table">
                            <thead>
                                <th>Word</th>
                                <th>Description</th>
                                <th>Translate</th>
                                <th>&nbsp;</th>
                            </thead>
                            <tbody>
                                @foreach ($words as $word)
                                    <tr>
                                        <td class="table-text"><div>{{ $word->word }}</div></td>
                                        <td class="table-text"><div>{{ $word->description }}</div></td>
                                        <td class="table-text"><div>{{ $word->translate }}</div></td>

                                        <!-- Task Delete Button -->
                                        <td>
                                            <form action="/word/{{ $word->id }}" method="POST">
                                                {{ csrf_field() }}
                                                {{ method_field('DELETE') }}

                                                <button type="submit" id="delete-word-{{ $word->id }}" class="btn btn-danger">
                                                    <i class="fa fa-trash"></i>Delete
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            @endif
        </div>
    </div>
@endsection
