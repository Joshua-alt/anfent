<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatereunificcationRequest;
use App\Http\Requests\UpdatereunificcationRequest;
use App\Repositories\reunificcationRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;
use App\DataTables\ReuniDataTable;
class reunificcationController extends AppBaseController
{
    /** @var  reunificcationRepository */
    private $reunificcationRepository;

    public function __construct(reunificcationRepository $reunificcationRepo)
    {
        $this->reunificcationRepository = $reunificcationRepo;
        $this->middleware('auth');
    }

    /**
     * Display a listing of the reunificcation.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(ReuniDataTable $dataTable)
    {
        return $dataTable->render('reunificcations.index');
    }


    /**
     * Show the form for creating a new reunificcation.
     *
     * @return Response
     */
    public function create()
    {
        return view('reunificcations.create');
    }

    /**
     * Store a newly created reunificcation in storage.
     *
     * @param CreatereunificcationRequest $request
     *
     * @return Response
     */
    public function store(CreatereunificcationRequest $request)
    {
        $input = $request->all();

        $reunificcation = $this->reunificcationRepository->create($input);

        Flash::success('Reunificcation saved successfully.');

        return redirect(route('reunificcations.index'));
    }

    /**
     * Display the specified reunificcation.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $reunificcation = $this->reunificcationRepository->find($id);

        if (empty($reunificcation)) {
            Flash::error('Reunificcation not found');

            return redirect(route('reunificcations.index'));
        }

        return view('reunificcations.show')->with('reunificcation', $reunificcation);
    }
    function eedit($id){
        $reunificcation = $this->reunificcationRepository->find($id);

        if (empty($reunificcation)) {
            Flash::error('Reunificcation not found');

            return redirect(route('reunificcations.index'));
        }
        return view('enfants.create')->with('enfant', $reunificcation);
       
    }

    /**
     * Show the form for editing the specified reunificcation.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $reunificcation = $this->reunificcationRepository->find($id);

        if (empty($reunificcation)) {
            Flash::error('Reunificcation not found');

            return redirect(route('reunificcations.index'));
        }

        return view('reunificcations.edit')->with('reunificcation', $reunificcation);
    }

    /**
     * Update the specified reunificcation in storage.
     *
     * @param int $id
     * @param UpdatereunificcationRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatereunificcationRequest $request)
    {
        $reunificcation = $this->reunificcationRepository->find($id);

        if (empty($reunificcation)) {
            Flash::error('Reunificcation not found');

            return redirect(route('reunificcations.index'));
        }

        $reunificcation = $this->reunificcationRepository->update($request->all(), $id);

        Flash::success('Reunificcation updated successfully.');

        return redirect(route('reunificcations.index'));
    }

    /**
     * Remove the specified reunificcation from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $reunificcation = $this->reunificcationRepository->find($id);

        if (empty($reunificcation)) {
            Flash::error('Reunificcation not found');

            return redirect(route('reunificcations.index'));
        }

        $this->reunificcationRepository->delete($id);

        Flash::success('Reunificcation deleted successfully.');

        return redirect(route('reunificcations.index'));
    }
}
