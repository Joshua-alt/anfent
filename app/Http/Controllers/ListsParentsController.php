<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateListsParentsRequest;
use App\Http\Requests\UpdateListsParentsRequest;
use App\Repositories\ListsParentsRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;
use App\DataTables\ParentDataTable;
class ListsParentsController extends AppBaseController
{
    /** @var  ListsParentsRepository */
    private $listsParentsRepository;

    public function __construct(ListsParentsRepository $listsParentsRepo)
    {
        $this->listsParentsRepository = $listsParentsRepo;
        $this->middleware('auth');
    }

    /**
     * Display a listing of the ListsParents.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(ParentDataTable $dataTable)
    {
        return $dataTable->render('lists_parents.index');
    }


    /**
     * Show the form for creating a new ListsParents.
     *
     * @return Response
     */
    public function create()
    {
        return view('lists_parents.create');
    }

    /**
     * Store a newly created ListsParents in storage.
     *
     * @param CreateListsParentsRequest $request
     *
     * @return Response
     */
    public function store(CreateListsParentsRequest $request)
    {
        $input = $request->all();

        $listsParents = $this->listsParentsRepository->create($input);

        Flash::success('Lists Parents saved successfully.');

        return redirect(route('listsParents.index'));
    }

    /**
     * Display the specified ListsParents.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $listsParents = $this->listsParentsRepository->find($id);

        if (empty($listsParents)) {
            Flash::error('Lists Parents not found');

            return redirect(route('listsParents.index'));
        }

        return view('lists_parents.show')->with('listsParents', $listsParents);
    }

    /**
     * Show the form for editing the specified ListsParents.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $listsParents = $this->listsParentsRepository->find($id);

        if (empty($listsParents)) {
            Flash::error('Lists Parents not found');

            return redirect(route('listsParents.index'));
        }

        return view('lists_parents.edit')->with('listsParents', $listsParents);
    }

    /**
     * Update the specified ListsParents in storage.
     *
     * @param int $id
     * @param UpdateListsParentsRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateListsParentsRequest $request)
    {
        $listsParents = $this->listsParentsRepository->find($id);

        if (empty($listsParents)) {
            Flash::error('Lists Parents not found');

            return redirect(route('listsParents.index'));
        }

        $listsParents = $this->listsParentsRepository->update($request->all(), $id);

        Flash::success('Lists Parents updated successfully.');

        return redirect(route('listsParents.index'));
    }

    /**
     * Remove the specified ListsParents from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $listsParents = $this->listsParentsRepository->find($id);

        if (empty($listsParents)) {
            Flash::error('Lists Parents not found');

            return redirect(route('listsParents.index'));
        }

        $this->listsParentsRepository->delete($id);

        Flash::success('Lists Parents deleted successfully.');

        return redirect(route('listsParents.index'));
    }
}
