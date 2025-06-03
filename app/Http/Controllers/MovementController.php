<?php

namespace App\Http\Controllers;

use App\Http\Requests\Movements\CreateMovementRequest;
use App\Http\Requests\Movements\UpdateMovementRequest;
use App\Models\Movement;
use App\Services\Movement\MovementService;

class MovementController extends Controller
{

    public function __construct(protected MovementService $service)
    {
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $movements = $this->service->getAll();
        return view('movements.index', compact('movements'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $movement = new Movement;
        return view('movements.create', compact(['movement']));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CreateMovementRequest $request)
    {

        try {
            $this->service->store($request->validated());
            return redirect()->route('movements.index')->with('success', 'Movement Created Succesfull');
        } catch (\Throwable $th) {
            return redirect()->back()->with('error', $th->getMessage())->withInput();
        }

    }
}
