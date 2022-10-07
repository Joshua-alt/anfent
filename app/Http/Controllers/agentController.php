<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateagentRequest;
use App\Http\Requests\UpdateagentRequest;
use App\Repositories\agentRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class agentController extends AppBaseController
{
    /** @var  agentRepository */
    private $agentRepository;

    public function __construct(agentRepository $agentRepo)
    {
        $this->agentRepository = $agentRepo;
        $this->middleware('auth');
    }

    /**
     * Display a listing of the agent.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $agents = $this->agentRepository->all();

        return view('agents.index')
            ->with('agents', $agents);
    }

    /**
     * Show the form for creating a new agent.
     *
     * @return Response
     */
    public function create()
    {
        return view('agents.create');
    }

    /**
     * Store a newly created agent in storage.
     *
     * @param CreateagentRequest $request
     *
     * @return Response
     */
    public function store(CreateagentRequest $request)
    {
        $input = $request->all();

        $agent = $this->agentRepository->create($input);

        Flash::success('Agent saved successfully.');

        return redirect(route('agents.index'));
    }

    /**
     * Display the specified agent.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $agent = $this->agentRepository->find($id);

        if (empty($agent)) {
            Flash::error('Agent not found');

            return redirect(route('agents.index'));
        }

        return view('agents.show')->with('agent', $agent);
    }

    /**
     * Show the form for editing the specified agent.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $agent = $this->agentRepository->find($id);

        if (empty($agent)) {
            Flash::error('Agent not found');

            return redirect(route('agents.index'));
        }

        return view('agents.edit')->with('agent', $agent);
    }

    /**
     * Update the specified agent in storage.
     *
     * @param int $id
     * @param UpdateagentRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateagentRequest $request)
    {
        $agent = $this->agentRepository->find($id);

        if (empty($agent)) {
            Flash::error('Agent not found');

            return redirect(route('agents.index'));
        }

        $agent = $this->agentRepository->update($request->all(), $id);

        Flash::success('Agent updated successfully.');

        return redirect(route('agents.index'));
    }

    /**
     * Remove the specified agent from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $agent = $this->agentRepository->find($id);

        if (empty($agent)) {
            Flash::error('Agent not found');

            return redirect(route('agents.index'));
        }

        $this->agentRepository->delete($id);

        Flash::success('Agent deleted successfully.');

        return redirect(route('agents.index'));
    }
}
