<?php declare(strict_types=1);

namespace App\Controller;

use App\Models\User;
use App\Repository\UserRepository;
use Slim\Container;
use Slim\Http\Request;
use Slim\Http\Response;
use Doctrine\ORM\EntityManager;

class FileController extends BaseController
{
    public function __construct(Container $container)
    {
        $this->container = $container;
    }

    public function index(Request $request, Response $response)
    {
        /** @var UserRepository $test */
        $test = $this->container->get(UserRepository::class);

        $users = $test->test();

        return $this->jsonResponse($response,'tset',$users,200);
    }

    public function show()
    {

    }

    public function upload()
    {

    }

    public function update()
    {

    }

    public function delete()
    {

    }


    public function __invoke(Request $request, Response $response, array $args): Response
    {
        $input = $request->getParsedBody();
        $user = $this->getUserService()->create($input);

        return $this->jsonResponse($response, 'success', $user, 201);
    }
}
