<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateenfantRequest;
use App\Http\Requests\UpdateenfantRequest;
use App\Repositories\enfantRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;
use App\DataTables\EnfantDataTable;
class enfantController extends AppBaseController
{
    /** @var  enfantRepository */
    private $enfantRepository;

    public function __construct(enfantRepository $enfantRepo)
    {
        $this->middleware('auth');
        $this->enfantRepository = $enfantRepo;
    }

    /**
     * Display a listing of the enfant.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(EnfantDataTable $dataTable)
    {
        return $dataTable->render('enfants.index');
    }
  

    /**
     * Show the form for creating a new enfant.
     *
     * @return Response
     */
    public function create()
    {
        return view('enfants.create');
    }

    /**
     * Store a newly created enfant in storage.
     *
     * @param CreateenfantRequest $request
     *
     * @return Response
     */
    public function store(CreateenfantRequest $request)
    {
        $input = $request->all();

        $enfant = $this->enfantRepository->create($input);

        Flash::success('Enfant saved successfully.');

        return redirect(route('enfants.index'));
    }

    /**
     * Display the specified enfant.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $enfant = $this->enfantRepository->find($id);

        if (empty($enfant)) {
            Flash::error('Enfant not found');

            return redirect(route('enfants.index'));
        }

        return view('enfants.show')->with('enfant', $enfant);
    }
  
    function edith($id){
        $enfant = $this->enfantRepository->find($id);

        if (empty($enfant)) {
            Flash::error('Enfant not found');

            return redirect(route('enfants.index'));
        }

        return view('reunificcations.create')->with('reunificcation', $enfant);
    }
    /**
     * Show the form for editing the specified enfant.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $enfant = $this->enfantRepository->find($id);

        if (empty($enfant)) {
            Flash::error('Enfant not found');

            return redirect(route('enfants.index'));
        }

        return view('enfants.edit')->with('enfant', $enfant);
    }

    /**
     * Update the specified enfant in storage.
     *
     * @param int $id
     * @param UpdateenfantRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateenfantRequest $request)
    {
        $enfant = $this->enfantRepository->find($id);

        if (empty($enfant)) {
            Flash::error('Enfant not found');

            return redirect(route('enfants.index'));
        }

        $enfant = $this->enfantRepository->update($request->all(), $id);

        Flash::success('Enfant updated successfully.');

        return redirect(route('enfants.index'));
    }

    /**
     * Remove the specified enfant from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $enfant = $this->enfantRepository->find($id);

        if (empty($enfant)) {
            Flash::error('Enfant not found');

            return redirect(route('enfants.index'));
        }

        $this->enfantRepository->delete($id);

        Flash::success('Enfant deleted successfully.');

        return redirect(route('enfants.index'));
    }
}
