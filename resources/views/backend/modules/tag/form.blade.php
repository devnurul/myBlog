                    {!! Form::label('name', 'Name') !!}
                    {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Enter tag name']) !!}
                    {!! Form::label('slug', 'Slug') !!}
                    {!! Form::text('slug', null, ['class' => 'form-control', 'placeholder' => 'Enter slug name']) !!}
                    {!! Form::label('order_by', 'Tag Serial') !!}
                    {!! Form::number('order_by', null, ['class' => 'form-control', 'placeholder' => 'Enter Serial Number']) !!}
                    {!! Form::label('status', 'Tag Status') !!}
                    {!! Form::select('status', [1 => 'Active', 0 => 'Inactive'], null, [
                        'class' => 'form-select',
                        'placeholder' => 'Enter slug name',
                    ]) !!}